
type coordonnes = {x : float; y :float; z : float};;
type agent = {ca : coordonnes; intensite : float};;
(*etat-> attractif repulsif inactif
Il y avait un valeur pour l'objet ???*)
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
| _ -> creagent ([nvagent]@listeagent) (acc-1);;
(*creation objet
date: 11/03/16-----------------------------------------------------------*)
(*coordonnées agent*)
let randomco = {x= Random.float 10.; y= Random.float 10.; z= Random.float 10.};;
(**creation objet*)
let nvobjet ={co= randomco; etat= "inactif"; periodicite= 0.};;
(*liste objet*)
let rec creaobjet listeobjet acc= match acc with
0 -> listeobjet
| _ -> creaobjet ([nvobjet]@listeobjet) (acc-1);;
(*creation de la map
date: 11/03/16
taillea :nombre agent
tailleo: nombre objet
*)
let creamap taillea tailleo = ((creagent [] taillea), (creaobjet [] tailleo));;
 
 
(*---------------------------------------------------------------------------------------------------------------*)
(*------------------------------------Résolution des équations de Lorenz------------------------------------------*)
(*------------------------------------Méthode de résolution: RUNGE-KUTTA ordre 4----------------------------------*)
(*---------------------------------------------------------------------------------------------------------------*)
 
(*-----calcule de dx/dt=f----------*)
let f x y = 10.*.(y-.x);;
(*-----calcule de dy/dt=g ----------*)
let g x y z = 28.*.x-.y-.x*.z;;
(*-----calcule de dz/dt=h ----------*)
let h y z =28.*.y-.(8./.3.)*.z;;


(*-----Calcule des coordonnés X Y Z -----------------*)
(*date: 04/04/16
 x y z: coordonné initiale de l'agent
 acc: nombre d'iteration du calcul de x y et z
 0.001: gamma: le pas*)
let rec calculcoor x y z = let a1=0.001*.(f x y) in
 let a2=0.001*.(f (x+.(a1/.2.)) (y+.(a1/.2.))) in
 let a3=0.001*.(f (x+.(a2/.2.)) (y+.(a2/.2.))) in
 let a4=0.001*.(f (x+.a3) (y+.a3)) in
 let b1=0.001*.(g x y z) in
 let b2=0.001*.(g (x+.(b1/.2.)) (y+.(b1/.2.)) (z+.(b1/.2.))) in
 let b3=0.001*.(g (x+.(b2/.2.)) (y+.(b2/.2.)) (z+.(b2/.2.))) in
 let b4=0.001*.(g (x+.b3) (y+.b3) (z+.b3))in
 let c1=0.001*.(h y z)in
 let c2=0.001*.(h (y+.(c1/.2.)) (z+.(c1/.2.)))in
 let c3=0.001*.(h (y+.(c2/.2.)) (z+.(c2/.2.)))in
 let c4=0.001*.(h (y+.c3) (z+.c3))in
  [(x+.a1+.2.*.a2+.2.*.a3+.a4);(y+.b1+.2.*.b2+.2.*.b3+.b4);(z+.c1+.2.*.c2+.2.*.c3+.c4)];;(*c'est ici que l'on peut récupérer les coordonnés a chaque itération*)

 (*---------------Evolution des agents-----------------*)
 (*date: 20/05/16
 *)
let remplacecoor agent coor = agent ={x= List.nth coor 0; y= List.nth coor 1; z=List.nth coor 2};
								agent;;

 (*date: 20/05/16
 *)
let rec evountour listeagent acc= match acc with
| [] -> acc;
| a::b -> evountour b acc@[{ca= (remplacecoor a.ca (calculcoor (a.ca.x) (a.ca.y) (a.ca.z))); intensite=a.intensite}] ;;

(*-------------------------------------*)
let rec ecrilist liste = match liste with
| []-> (print_string " FIN ")
| a::b -> (print_endline ((string_of_float a.ca.x)^" ; "^(string_of_float a.ca.y)^" ; "^(string_of_float a.ca.z)));
			(ecrilist b);;

(*date: 20/05/16
listeagent: la liste des agents
nbevo : le nombre de tours d'évolution que suivent les agents *) 
let evolution listeagent nbevo= 
		for i = 1 to nbevo do
			(*la liste qu'il faudra ecrire sur le fichier*)(ecrilist (evountour listeagent []));
		done;;


(*fonction d'appel du prog
date: 30/05/16
*)
let appel nbagent nbobjet nbevo =
	evolution (fst (creamap nbagent nbobjet)) nbevo;;
