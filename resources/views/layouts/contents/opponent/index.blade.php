<main class="main-content  mt-0">
    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <script src="{{ asset('js/spinner.js') }}"></script>
    <div class="page-header align-items-start min-vh-100">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Choose Partner</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('store.opponent') }}">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <p>Click on the button to ballot for partner</p>
                                    <select name="opponent" id="" class="form-control" hidden>

                                        @foreach($kofi as $opp)
                                            <option value="{{ $opp->name }}">{{ $opp->alias }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Ballot For Partner</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
