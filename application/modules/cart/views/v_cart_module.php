<table>
<tr>
	<td>Name</td>
	<td>Price</td>
	<td>Amount</td>
</tr>
<?php foreach($products as $product): ?>
	<tr>
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->price; ?></td>
		<td><?php echo $product->amount; ?></td>
	</tr>
<?php endforeach; ?>
</table>