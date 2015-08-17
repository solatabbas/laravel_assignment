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
                            <h1>Category List</h1>
                    </td>
                </tr>
                <br>
                <tr>
                    <td width="20%">ID</td>
                    <td width="50%">Title</td>
                    <td>View Products</td>
                </tr>
                <?php if($cateogyList)  : ?>
                <?php foreach ($cateogyList as $data) : //print_r($data);?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['title']; ?></td>
                            <td><a href="<?php echo $url = route('category_products', ['id' =>  $data['id']]); ?>">View products</a> </td>
                        </tr>
                <?php endforeach ?>
                <?php endif ?>
            </table>
        </div>
    </body>
</html>
