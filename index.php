/**
* Plugin Name: Orenji_Moodle
* Plugin URI: https://ead.es.gov.br
* Description: Plugin para tratamento de dados do moodle no Wordpress.
* Version: 0.0.1
* Author: Raphael Scalfoni
* Author URI: https://www.linkedin.com/in/raphaelscalfoni/
* License: GNU GPL3
*/

add_action('admin_menu', 'orenji_menu');
 
function orenji_menu(){ 
    //cria o menú na pag admin do wordpress
    add_menu_page(
        "Orenji's Plugin Page",
        "Orenji's Plugin para Moodle",
        'manage_options',
        'orenji-moodle-plugin',
        'orenji_init'
    );

}
 
function orenji_init(){
    echo "<h1>Orenji's Moodle</h1><br><p>Relatórios de curso para o moodle.</p>";
    echo "<h2>Importante: Verifique os submenus.</h2>";
    include 'conexao.php'; //conecta ao BD EAD ESESP
    include 'functions.php'; //inclui todas as funções necessárias para relatório
}








?>
