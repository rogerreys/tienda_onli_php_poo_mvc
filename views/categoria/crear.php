<h1>Crear nueva categoria</h1>
<form action="<?=base_url?>Categoria/save" method="POST">
    <label from="nombre">Nombre</label>
    <input type="text" name="nombre" required="required">
    
    <input type="submit" value="Guardar"/>
</form>
