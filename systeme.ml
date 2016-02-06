


type agent = {x: float; y : float; z :float};;

let relation a = {x=10.*.(a.x-.a.y); y=(10.*.a.x)-.(a.x*.a.z)-.a.y; z=(a.x*.a.y)-.(8./.3.)*.a.z};; (*faire varier r entre 10 et 200*)(*r=30 attracteur étrange*)

let agent_to_str a = "x="^(string_of_float a.x)^", y="^(string_of_float a.x)^", z="^(string_of_float a.z)^"\n";;
(*
let rec evolution a  it acc= if acc=10 then a 
else 
	match (it mod 2) with
	0 -> print_string (agent_to_str a) ; evolution (relation a) (it+1) (acc+1)
	|_-> evolution (relation a) (it+1) (acc);;
*)


let rec evolution a it acc l = if acc=7 then ( l) 
else 
	match (it mod 2) with
	0 -> evolution (relation a) (it+1) (acc+1) l@[a]
	|_-> evolution (relation a) (it+1) (acc) l
;;