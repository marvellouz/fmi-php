{extends file="../templates_c/index.tpl"}
{block name=content}



<div class = "container">

<form action="." method="POST">
<label for="fileName">Въведете име на файл:</label>
<br />
<input type="text" name="fileName" />
<br />
<br />
<input type="submit" name="submit" value="Търси" />
</form>
<p id="search_result">
{$search_result}
</p>
</div>

{/block}
