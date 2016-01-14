@extends('app')
@section('content')
<h2>Product Category <button onclick="window.location='{{url()}}/category/create'" type="button" class="btn btn-success">Add New</button></h2>
<br>

<div class="table-responsive">
    <table class="table table-bordered"><!-- {{ testHelper()}} -->
        <thead>
            <tr>
                <th width="10%">ID</th>
                <th width="20%">Title</th>
                <th width="20%">Created By</th>
                <th width="25%">Description</th>
                <th>Icon</th>
                <th width="5%">View Products</th>
                <th width="5%">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php if($categoryList)  : ?>
                <?php foreach ($categoryList as $data) : //echo '<pre>';print_r($data);?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['description']; ?></td>

                        <td>
                            <?php if($data['image_title'] !=''): ?>
                            <img  width="35" height="35" src="{{url()}}/images/category/<?php echo $data['image_title']; ?>">
                            <?php endif ?>
                         </td>
                        <td><a style="width: 110px;" class="btn btn-success" href="<?php echo $url = route('category_products', ['id' =>  $data['id']]); ?>">View Products</a> </td>
                        <td><a href="<?php echo $urlEdit = route('category_edit', ['id' =>  $data['id']]); ?>" class="btn btn-warning" role="button" style="width: 110px;">Edit</a></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            <tr>
            <Td colspan="4" align="">
                  <?php echo $categoryList->render(); ?>
             </Td>
             <?php //echo $categoryList->appends(['sort' => 'votes'])->render(); ?>
             <td colspan="4" valign="middle">Your are in page <?php echo $categoryList->currentPage();?> <?php echo "Total Found ".$categoryList->total(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
@stop



