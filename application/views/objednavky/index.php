<tbody>
<?php foreach ($objednavky as $objednavky_item ): ?>
    <tr>
        <td><?php echo $objednavky_item[ 'Specialne_poziadavky_ID ']; ?></td>
        <td><?php echo $objednavky_item[ 'Typ_oslavy ']; ?></td>
        <td><?php echo $objednavky_item[ 'Miesto_konania_ID ']; ?></td>
        <td><?php echo $objednavky_item[ 'Vyzdoba_ID ']; ?></td>
        <td><?php echo $objednavky_item[ 'Menu_ID ']; ?></td>
        <td>
            <a class="btn-info" href="<?php echo site_url( 'operacie/view '.$objednavky_item[ 'ID ']);?>">View</a>
            <a class="btn-success" href="<?php echo site_url( 'operacie/edit '.$objednavky_item[ 'ID ']);?>">Edit</a>
            <a class="btn-warning" href="<?php echo site_url( 'operacie/delete '.$objednavky_item[ 'ID ']);?>"
            onClick="return confirm( 'Naozaj chcete zaznam vymazat ? ')">Delete</a>

        </td>


    </tr>
<?php endforeach; ?>

</tbody>