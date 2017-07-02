function getServerOffset() {
    // This is all for PST
    var curDT = new Date(),
    curYear = curDT.getUTCFullYear(),
    curMonth = curDT.getUTCMonth(),
    curDate = curDT.getUTCDate(), dstMul = 2;
    if(curMonth == 2) {
        var firstDate = new Date(Date.UTC(curYear, 2, 1)),
        firstDay = firstDate.getUTCDay(),
        secondSunday = new Date(Date.UTC(curYear, 2, (7 - firstDay)%7 +8)).getUTCDate();
        if(curDate > secondSunday || (curDate == secondSunday && curDT.getUTCHours() >= 10)) dstMul = 1;
    }
    else if(curMonth == 10) {
        var firstDate = new Date(Date.UTC(curYear, 2, 1)),
        firstDay = firstDate.getUTCDay(),
        firstSunday = new Date(Date.UTC(curYear, 2, (7 - firstDay)%7 +1)).getUTCDate();
        if(curDate < firstSunday || (curDate == firstSunday && curDT.getUTCHours() < 10)) dstMul = 1;
    }
    else if(curMonth > 2 && curMonth < 10) dstMul = 1;

    return -6 * 60 * 60 * 1000 - (60 * 1000 * 60) * dstMul;
};

function getServerTimeMillis(date) {
    return (date || new Date()).getTime() + getServerOffset();
}

function serverTimeToErinnTime(serverTime) {
    var TIME_PER_ERINN_MINUTE = 1500; // 1.5 s
    var TIME_PER_ERINN_HOUR   = TIME_PER_ERINN_MINUTE * 60; // 1 min 30 s
    var TIME_PER_ERINN_DAY    = TIME_PER_ERINN_HOUR * 24; // 36 min
    return {
        'hour': Math.floor(serverTime / TIME_PER_ERINN_HOUR) % 24,
        'minute': Math.floor(serverTime / TIME_PER_ERINN_MINUTE) % 60
    };
}

function formatTime(hours, minutes) {
    var hoursPrefix = hours < 10 ? '0' : '';
    var minutesPrefix = minutes < 10 ? ':0' : ':';
    return hoursPrefix + hours + minutesPrefix + minutes;
}

function listSelector(list, serverTime, epoch, nightShift) {
    var TIME_PER_ERINN_MINUTE = 1500; // 1.5 s
    var TIME_PER_ERINN_HOUR   = TIME_PER_ERINN_MINUTE * 60; // 1 min 30 s
    var TIME_PER_ERINN_DAY    = TIME_PER_ERINN_HOUR * 24; // 36 min
    var erinnDaysPassed = (serverTime - epoch) / TIME_PER_ERINN_DAY;
    var erinnHour = serverTimeToErinnTime(serverTime).hour;
    var startTime = serverTime - (serverTime % TIME_PER_ERINN_DAY);
    var index = Math.floor(erinnDaysPassed) % list.length;

    if (nightShift) {
        if (erinnHour < 6) {
            startTime -= 6 * TIME_PER_ERINN_HOUR;
        } else {
            startTime += 18 * TIME_PER_ERINN_HOUR;
        }
    }

    if (index < 0) {
        index += list.length;
    }
    return { time: startTime, index: index };
}

function nextItemsGenerator(list, epoch, nightShift, serverTime) {
    var start = listSelector(list, serverTime, epoch, nightShift);
    return list[(start.index) % list.length];
}

function getServerHour() {
    var date = new Date();
    var serverTime = getServerTimeMillis(date);
    var serverDate = new Date(serverTime);

    return serverDate.getUTCHours();
}

var price = {
        tir: 'Outside Tir Chonaill Inn',
        dugald: 'Dugald Aisle Logging Camp Hut',
        dunbartonField: 'Dunbarton East Potato Field',
        dragonRuins: 'Dragon Ruins - House at 5 o\'clock ',
        bangorBar: 'Bangor Bar',
        senMag: 'Sen Mag 5th house from West',
        emainAlley: 'Emain Macha - Alley Behind Weapon Shop',
        ceo: 'Ceo Island',
        emainIsland: 'Emain Macha - Island in South Pathway',
        barri: 'Outside Barri Dungeon',
        dunbartonSchool: 'Dunbarton School Stairway'
    };
var priceEpoch = Date.parse('Mar 24, 2008 00:00:00 GMT');
var priceList = function(p) {
    return [
        p.tir, p.dugald, p.dunbartonField, p.dragonRuins, p.bangorBar,
        p.senMag, p.emainAlley, p.ceo, p.emainIsland, p.senMag,
        p.dragonRuins, p.barri, p.dunbartonSchool, p.dugald
    ];
}(price);

var x = setInterval(function() {
    var date = new Date();
    var serverTime = getServerTimeMillis(date);
    var erinnTime = serverTimeToErinnTime(serverTime);
    var serverDate = new Date(serverTime);
    var priceLocations = nextItemsGenerator(priceList, priceEpoch, false, serverTime);

    try{
        if(countDownDate !== 'undefined' && countDownDate) {
            var now = new Date(serverDate.getUTCFullYear(), serverDate.getUTCMonth(), serverDate.getUTCDate(),  serverDate.getUTCHours(), serverDate.getUTCMinutes(), serverDate.getUTCSeconds()).getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $(".refreshTime").html(hours + "h " + minutes + "m " + seconds + "s ");
        }
    }catch(e) {

    }

    $(".pricetime").html("<strong>Price Location:</strong> "+ priceLocations);
    $(".errintime").html("<strong>Erinn Time:</strong> "+ formatTime(erinnTime.hour, erinnTime.minute));
    $(".localtime").html("<strong>Local Time:</strong> "+ formatTime(date.getHours(), date.getMinutes()));
    $(".servertime").html("<strong>Server Time:</strong> "+ formatTime(serverDate.getUTCHours(), serverDate.getUTCMinutes()));
}, 1000);

$(".raid").each(function() {
    $("td").each(function() {
        if($(this).attr('class') == getServerHour()) {
            if($(this).attr('id') != "time" && $(this).attr('id') != "timeOverlap") {
                $(this).attr('id', 'curTime')
            }

            if($(this).attr('id') == "time"){
                $(this).attr('id', 'timeOverlap')
            }
        }
    });
});
