<script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

<form action="post.php" method="post">
    <input type="text" name="title" placeholder="Post Title">
    <div class="editor">
        <textarea name="content" cols="95"></textarea>
    </div>
    <input type="submit">
</form>
