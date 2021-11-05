<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          response
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($questionnaire as $quest)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Le numéro de la question</th>
                        <th scope="col">Le corps de la question</th>
                        <th scope="col">La réponse en texte</th>
                    </tr>
                </thead>
                @foreach($questions as $qr)

                        <tbody>

                            <tr>
                                <td>{{$qr->numero}}</td>
                                <td>{{$qr->corps}}</td>
                                @if($qr->numero === 1)
                                    <td>{{$quest->email}}</td>
                                @endif
                                @if($qr->numero === 2)
                                    <td>{{$quest->age}}</td>
                                @endif
                                @if($qr->numero === 3)
                                    <td>{{$quest->sexe}}</td>
                                @endif
                                @if($qr->numero === 4)
                                    <td>{{$quest->nb_Foyer}}</td>
                                @endif
                                @if($qr->numero === 5)
                                    <td>{{$quest->profession}}</td>
                                @endif
                                @if($qr->numero === 6)
                                    <td>{{$quest->marque}}</td>
                                @endif
                                @if($qr->numero === 7)
                                    <td>{{$quest->magasin}}</td>
                                @endif
                                @if($qr->numero === 8)
                                    <td>{{$quest->casque}}</td>
                                @endif
                                @if($qr->numero === 9)
                                    <td>{{$quest->nb_utilise_vr}}</td>
                                @endif
                                @if($qr->numero === 10)
                                    <td>{{$quest->utilisations}}</td>
                                @endif
                                @if($qr->numero === 11)
                                    <td>{{$quest->qualite}}</td>
                                @endif
                                @if($qr->numero === 12)
                                    <td>{{$quest->confort}}</td>
                                @endif
                                @if($qr->numero === 13)
                                    <td>{{$quest->connection}}</td>
                                @endif
                                @if($qr->numero === 14)
                                    <td>{{$quest->qualite_graph}}</td>
                                @endif
                                @if($qr->numero === 15)
                                    <td>{{$quest->qualiteAudio}}</td>
                                @endif
                                @if($qr->numero === 16)
                                    <td>{{$quest->notifications}}</td>
                                @endif
                                @if($qr->numero === 17)
                                    <td>{{$quest->invitation_session}}</td>
                                @endif
                                @if($qr->numero === 18)
                                    <td>{{$quest->enregistrement}}</td>
                                @endif
                                @if($qr->numero === 19)
                                    <td>{{$quest->jeux_exclusifs}}</td>
                                @endif
                                @if($qr->numero === 20)
                                    <td>{{$quest->nouvelle_fonctionnalite}}</td>
                                @endif
                            </tr>
                        </tbody>
                @endforeach
            </table>
            @endforeach
       </div>
    {{$questionnaire->links()}}
</x-app-layout>
