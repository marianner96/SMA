
type coordonnes = {x : float; y :float; z : float};; 
type agent = {ca : coordonnes; intensite : float};;

(*etat-> attractif repulsif inactif 

Il  y avait un valeur pour l'objet ???*)
type objet = {co: coordonnes; etat : string; periodicite : float};;

(*creation agent
date: 11/03/16---------------------------------------------------*)
(*coordonnées agent*)
let randomca = {x= Random.float 10.; y= Random.float 10.; z= Random.float 10.};;
(*agent*)
let nvagent = { ca= randomca; intensite= (Random.float 10.)};;

(*liste d'agent*)
let rec creagent listeagent acc= match acc with
 0 -> listeagent
| _ -> creagent ([nvagent]::listeagent) (acc-1);;

(*creation objet
date: 11/03/16-----------------------------------------------------------*)
(*coordonnées agent*)
let randomco = {x= Random.float 10.; y= Random.float 10.; z= Random.float 10.};;
(**creation objet*)
let nvobjet ={co= randomco; etat= "inactif"; periodicite= 0.};;
(*liste objet*)
let rec creaobjet listeobjet acc= match acc with
 0 -> listeobjet
| _ -> creaobjet ([nvobjet]::listeobjet) (acc-1);;

(*creation de la map
date: 11/03/16 
taillea :nombre agent
tailleo: nombre objet
*)

let creamap taillea tailleo = ((creagent [] taillea), (creaobjet [] tailleo));;



