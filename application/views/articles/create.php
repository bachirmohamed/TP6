<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('articles/create') ?>

<label for="titre_article">Title</label>
<input type="input" name="titre_article" /><br />

<label for="texte_libre">Text</label>
<textarea name="texte_libre"></textarea><br />

<input type="submit" name="submit" value="Veuillez créer un nouvel article" />

</form>

