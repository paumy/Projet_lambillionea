@extends ('../Template.layout')

@section('javascript')
<script>
        
        $(document).ready(function(){
            
            $('.modal-trigger').leanModal();

            $('#header').load('modals.html');

        });

    </script>
@endsection
@section('contenu')
 <div id="header"></div>
    
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h2 class="header josefin-bold col s12">événements</h2>
                <p class="light">Les réunions se tiennent tous les 3èmes samedi du mois (de septembre à avril inclus) au Musée Royal d'Afrique Centrale à Tervuren – au Palais des colonies (qui se trouve face à vous lorsque vous êtes près de la fontaine des animaux musiciens) , l'entrée se fait par le département de Géologie (à droite quand vous êtes face au bâtiment).</p>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="media/bg-2.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="z-depth-3">
    <div class="container">
        <div class="section">

                <a class="col s4 btn light-green" href="#">Connexion admin</a>

            <h2 class="josefin-bold">Evénements à venir</h2>
               <table class="striped">
                <thead>
                    <tr>
                        <th data-field="date">Date</th>
                        <th data-field="name">Evénement</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($evenements as $evenement)
                    <tr>
                        <td class="josefin-bold">{{ $evenement->date }}</td>
                        <td>
                            <h5 class="josefin-regular">{{ $evenement->titre}}</h5>
             
                            <br>Adresse : {{ $evenement->rue}} {{$evenement->numero}},  {{$evenement->codePostal}} {{$evenement->localite}}</p>
                            <p>Contact Email : <a href="#">{{$evenement->contact}}</a></p>
                        </td>
                        <td>
                            <div>
                                <a href="{{route('modifierEvenement', ['id'=>$evenement->id])}}">Modifier</a>
                            </div>
                            <div>
                                 <a href="{{route('supprimerEvenement', ['id'=>$evenement->id])}}">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                 
                </tbody>
                 <a class="col s4 btn waves-effect waves-light" href="{{route('ajouterEvenement')}}">Ajouter un evenement</a>
            </table> 
                
        </div>
    </div>
</div>

 @endsection