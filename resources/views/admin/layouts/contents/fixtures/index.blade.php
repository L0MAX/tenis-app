
<main class="main-content  mt-0">
    <div class="page-header align-items-start" style="margin-top: 20px !important;">
        <div class="container my-auto">
            <div class="row">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Pairings</h4>
                            </div>
                        </div>
                        @include('message.alerts')
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Team</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fixtures as $fixture)
                                <tr>
                                <td>{{$fixture->id}}</td>
                                <td>{{$fixture->player1}} & {{$fixture->player2}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm editMarketOrderModal"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-secondary btn-sm viewMarketOrderModal" title="Show"><i class="fa fa-list"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm deleteMarketOrderModal"><i class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
