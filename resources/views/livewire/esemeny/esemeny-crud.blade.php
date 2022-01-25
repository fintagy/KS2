<div class="container">
    <br/>
    @php $tomb = array("2021.09.30.","cica","ló", "sügér", "csuka", "hangya", "egér");   
    @endphp
    @foreach(array_chunk($tomb, 3) as $chunk)
        <div class="row">
            @foreach($chunk as $add)
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                <div class="card border-secondary mb-3">
                    <div class="card-header">
                        Esemény napja: {{$add}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$add}}</h5>
                        <p class="card-text">Ide kerül a riasztás rövid leírása</p>
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-2">
                                    <a href="#" class="btn btn-warning" title="{{ __('messages.Call') }}"><i class="fas fa-phone" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="btn btn-warning" title="{{ __('messages.Send') }}"><i class="fas fa-envelope" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="btn btn-success" title="{{ __('messages.Completed') }}"><i class="fas fa-check" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="btn btn-danger" title="{{ __('messages.Delete') }}"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-success">Ennyi nap az eseményig: 12</div>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
</div>

