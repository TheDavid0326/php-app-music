<?php 
require_once('const.php');
require_once('functions.php');

$data=get_data($API_URL);
$data['genre']= $genre;
?>

<?php echo render_template('head', $data); // Hay que poner echo porque recibimos un string de la función ?>
<?php echo render_template('body', $data); ?>
<?php require('styles.php'); ?>




