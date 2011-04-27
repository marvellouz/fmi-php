{extends file="../templates_c/index.tpl"}
{block name=content}

<div class = "container">
<form method="post" action="index.php">
<label for="email">E-mail: </label><br/>
<input type="text" id="email" name="email"/>
<br/>
<label for="password">Парола: </label><br/>
<input type="password" id="password" name="password"/>
<br/>
<br/>
<input type="submit" name="login" value="Вход"/>
</form>
</div>

{/block}
