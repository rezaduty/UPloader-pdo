<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="ckeditor/ckeditor.js"></script>
<script>
		var editor;
		function changeEnter() {
			// If we already have an editor, let's destroy it first.
			if ( editor )
				editor.destroy( true );

			// Create the editor again, with the appropriate settings.
			editor = CKEDITOR.replace( 'editor1', {
					    	enterMode: CKEDITOR.ENTER_DIV
					 });
		}
		window.onload = changeEnter;
</script>
</head>

<body>
<div style="width:700px;">
<form>
<textarea name="txtcontent" cols="200" rows="25" id="editor1">kpnu-csc.ir</textarea>
</form>
</div>
</body>
</html>