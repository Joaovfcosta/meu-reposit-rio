<?php
echo "<h2>Fale conosco</h2>";
echo "<p>Entre em contato pelo telefone:</p>";
echo "<p>(21) 972799169</p>";
?>
<form action="?pg=form-aulas" method="post">
    <label>Nome:</label>
    <input type="text" name="nome"> <br>
    <label>E-mail:</label>
    <input type="text" name="email"> <br>
    <label>Telefone:</label>
    <input type="text" name="telefone"> <br>
    <label>endereço:</label>
    <textarea name="endereço"></textarea> <br>
    <input type="submit" value="Enviar">
</form>
