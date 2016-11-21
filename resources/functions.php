<?php 

$upload_directory = "imgs";

function last_id(){
    global $connection;
    return mysqli_insert_id($connection);
}

//HELP´---------------------------------------------------
 
function set_mensaje($msg){
    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    } else{
        $msg = "";
    }
}

function dsp_mensaje(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

   

function rdirect($location){
    return header("Location: $location");
}
 
function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("ERROR QUERY: ". mysqli_error($connection));
    }
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
} 
 
/***************************** FRONTEND function ****************************/

//get Productos ---------------------------------------------

function get_Color(){
    $query = query("SELECT * FROM colordesign Where c_favorito='5 Estrellas'");
    confirm($query);
    
    while($row = fetch_array($query)){
        /**-*/
        $color = <<<DELIMETER
<div class="color-x5 comments col-sm-6 col-lg-4">
<div class="colorfavorito disqus-comment-count btn num-comments">{$row['c_id']} : {$row['c_titulo']}
  <span class="fa fa-chevron-left"></span>
           
            <div style="float:right;" class="btn btn-action time-to-read" data-animation="true" data-toggle="tooltip" data-placement="top" data-html="true" title="<div class='tooltip-box'><div class='colores' style='background:{$row['c_primario']}; color: white;'><span class='colorLG'>{$row['c_primario']}</span></div><div class='colores' style='background:{$row['c_secundario']}; color: white;'><span class='colorLG'>{$row['c_secundario']}</span></div><div class='colores' style='background:{$row['c_resaltar']}; color: white;'><span class='colorLG'>{$row['c_resaltar']}</span></div><div class='colores' style='background:{$row['c_texto']};color: black;'><span class='colorLG'>{$row['c_texto']}</span></div><div class='colores' style='background:{$row['c_textoIcon']}; color: white;'><span class='colorLG'>{$row['c_textoIcon']}</span></div></div>">
                <div class="color-forma-cuadrado" style="background:{$row['c_primario']};"></div>
                <div class="color-forma-cuadrado" style="background:{$row['c_secundario']};"></div>
                <div class="color-forma-cuadrado" style="background:{$row['c_resaltar']};"></div>
                <div class="color-forma-cuadrado" style="background:{$row['c_texto']};"></div>
                <div class="color-forma-cuadrado" style="background:{$row['c_textoIcon']};"></div>
            </div>
       
</div>
    
<div class="disqus-wrapper">
    <div class="colores" style="background:{$row['c_primario']}; color: white;">
        <span class="colorH">{$row['c_primario']}</span>
    </div>
    <div class="colores" style="background:{$row['c_secundario']}; color: white;">
        <span class="colorH">{$row['c_secundario']}</span>
    </div>
    <div class="colores" style="background:{$row['c_resaltar']}; color: white;">
        <span class="colorH">{$row['c_resaltar']}</span>
    </div>
    <div class="colores" style="background:{$row['c_texto']};color: black;">
        <span class="colorH">{$row['c_texto']}</span>
    </div>
    <div class="colores" style="background:{$row['c_textoIcon']}; color: white;">
        <span class="colorH">{$row['c_textoIcon']}</span>
    </div>
    
</div>
</div>
DELIMETER;
        
echo $color;
        
		}
}

function get_ColorSwatches(){
    $query = query("SELECT * FROM colorswatches");
    confirm($query);
    
    while($row = fetch_array($query)){
        /**-*/
        $colorswatches = <<<DELIMETER

    <color name="cs_50_{$row['cs_titulo']}">{$row['cs_50']}</color>
    <color name="cs_100_{$row['cs_titulo']}">{$row['cs_100']}</color>
    <color name="cs_200_{$row['cs_titulo']}">{$row['cs_200']}</color>
    <color name="cs_300_{$row['cs_titulo']}">{$row['cs_300']}</color>
    <color name="cs_400_{$row['cs_titulo']}">{$row['cs_400']}</color>
    <color name="cs_500_{$row['cs_titulo']}">{$row['cs_500']}</color>
    <color name="cs_600_{$row['cs_titulo']}">{$row['cs_600']}</color>
    <color name="cs_700_{$row['cs_titulo']}">{$row['cs_700']}</color>
    <color name="cs_800_{$row['cs_titulo']}">{$row['cs_800']}</color>
    <color name="cs_900_{$row['cs_titulo']}">{$row['cs_900']}</color>
    <color name="cs_A100_{$row['cs_titulo']}">{$row['cs_A100']}</color>
    <color name="cs_A200_{$row['cs_titulo']}">{$row['cs_A200']}</color>
    <color name="cs_A400_{$row['cs_titulo']}">{$row['cs_A400']}</color>
    <color name="cs_A700_{$row['cs_titulo']}">{$row['cs_A700']}</color>
    <!------------------------------------------------->
DELIMETER;
        
echo $colorswatches;
        
		}
}
?>