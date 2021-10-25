
@foreach ($filter as $filter)
  <a class="accordion-button" data-bs-toggle="collapse" href="#collapseList{{$loop->iteration}}" role="button" aria-expanded="true" aria-controls="collapseList{{$loop->iteration}}">
    <h5 class="">{{$filter['title']}}</h5>
  </a>
  <div class="collapse multi-collapse show" id="collapseList{{$loop->iteration}}">
    <ul class="list-group">
        @foreach ($filter['checklist'] as $value)
        <li class="list-group-item">
          <input class="form-check-input me-2" type="checkbox" value="" aria-label="...">
          {{$value['title'] }}
          <span class="badge bg-primary rounded-pill float-end">{{$value['results'] }}</span>
        </li>    
        @endforeach
    </ul>
  </div>
@endforeach
