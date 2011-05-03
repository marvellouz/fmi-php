{extends file="../templates_c/index.tpl"}
{block name=content}

<div class = "container">
<form method="post" action="../register/">

<label for="FirstName">Име: </label><br/>
<input type="text" id="FirstName" name="FirstName"/>
<br/>

<label for="LastName">Фамилия: </label><br/>
<input type="text" id="LastName" name="LastName"/>
<br/>

<label for="email">E-mail: </label><br/>
<input type="text" id="Email" name="Email"/>
<br/>

<label for="password">Парола: </label><br/>
<input type="password" id="Password" name="Password"/>
<br/>

<br/>
<input type="submit" name="register" value="Регистрация"/>
</form>
</div>

{/block}
