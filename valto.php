<? session_start(); ?>
<form action='megnezo.php' method='POST' target='megjeleno' >
	Kérem hogy mit szeretne váltani. és mennyit <br>
	<select name='mit'>
		<option>---Válassz!---</option>
		<option value='huf'>HUF</option>
		<option value='EUR'>EUR</option>
		<option value='USD'>USD</option>
		<option value='CHF'>CHF</option>
		<option value='GBP'>GBP</option>
		<option value='CZK'>CZK</option>
		<option value='HRK'>HRK</option>
		<option value='PLN'>PLN</option>
	</select> <input ='number' name='mennyit'><br>
	Illetve persze hogy mire szeretné váltani azt.<br>
	<select name='mire'>
		<option>---Válassz!---</option>
		<option>HUF</option>
		<option>EUR</option>
		<option>USD</option>
		<option>CHF</option>
		<option>GBP</option>
		<option>CZK</option>
		<option>HRK</option>
		<option>PLN</option>
	</select><br>
	<input type='submit' value='Váltás!'><br>
	
	<iframe name='megjeleno'></iframe>
</form>