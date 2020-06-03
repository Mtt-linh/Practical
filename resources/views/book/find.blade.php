@extends("layout")
@section("Content")
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Book search</h4>
                        <div class="add-product">
                            <a href="#">seach book</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>author id</th>
                                    <th>Title</th>
                                    <th>ISBN</th>
                                    <th>pub year</th>
                                    <th>available</th>
                                    <th></th>
                                </tr>

                                    <tr>
                                        <td>{{$book->__get("id")}}</td>
                                        <td>{{$book->__get("author_id")}}</td>
                                        <td>{{$book->__get("title")}}</td>
                                        <td>{{$book->__get("ISBN")}}</td>
                                        <td>{{$book->__get("pub_year")}}</td>
                                        <td>{{$book->__get("available")}}</td>

                                    </tr>
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
