<!DOCTYPE html>
<html>
    <head>
        <title>Category List</title>
    </head>
    <body>
        <div class="container">
            <table width="100%">
                <tr>
                    <td colspan="4" align="center">
                            <h1>Products List</h1>
                    </td>
                </tr>
                <br>
                <tr>
                    <td width="20%">ID</td>
                    <td width="50%">Title</td>
                    <td>View Detail</td>
                </tr>
                <?php if($productList)  { ?>
                <?php foreach ($productList as $data) : ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['title']; ?></td>
                            <td><a href="#">View detail</a> </td>
                        </tr>
                <?php endforeach ?>
                <?php }  else { ?>
                <tr>
                    <td align="center" colspan="3">No Record found </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>
