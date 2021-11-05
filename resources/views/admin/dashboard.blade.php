<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Questionnaires
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button class="btn btn-primary mb-2" onclick="myFunction()">Ajouter des questions ?</button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Corps de la question</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                @foreach($questions as $question)
                <tbody>

                    <tr>
                        <td>{{$question->numero}}</td>
                        <td>{{$question->corps}}</td>
                        <td>{{$question->type}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{$questions->links()}}
            <div class="col-md-6 collapse" id="myDIV">
                    <div class="card">
                        <div class="card-header">Ajout question</div>
                        <div class="card-body">
                            <form action=" {{route('store.question')}} " method="POST">
                                @csrf
                                <div class="form-group ">
                                    <label for="inputName">Numero</label>
                                    <div class="col-sm-1-12">
                                        <input type="number" class="form-control" name="numero" id="inputName" placeholder="">

                                            <span class="text-danger"></span>

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="inputName">Corps de la question</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="corps" id="inputName" placeholder="">

                                            <span class="text-danger"></span>

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="inputName">Type de questions</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="type" id="inputName" placeholder="">

                                            <span class="text-danger"></span>

                                    </div>
                                </div>
                                 <button type="submit" class="btn btn-primary mt-2">Ajouter une question</button>
                            </form>
                        </div>

                    </div>
                </div>

        </div>
       </div>

</x-app-layout>
<script>
  function myFunction() {
  letx = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
