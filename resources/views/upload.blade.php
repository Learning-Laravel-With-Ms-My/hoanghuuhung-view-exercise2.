<h1>Form Upload File PHP</h1>
<form action="<?php echo route('categories.upload');?> " method="post" 
    enctype="multipart/form-data">
    <p>Tên file: <input type="file" name="photo"></p>
    <input type="hidden" name="_token" id="" value="<?php echo csrf_token(); ?>" >
    <button type="submit" >Upload</button>
</form>
