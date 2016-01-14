@extends('app')
@section('content')
<h2>Product List</h2>
<div class="table-responsive">
    <table class="table table-bordered">
     <thead>
        <tr>
            <th >ID</th>
            <th >Title</th>
            <th>View Detail</th>
        </tr>
    </thead>
    <tbody>
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
            <td align="center" colspan="3">
                <div class="alert alert-danger">
                  <strong>Danger!</strong> no record found.
                </div>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
@stop
