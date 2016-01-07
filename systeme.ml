#load "graphics.cma";;
open Graphics;;

type etat = { mutable x : float; mutable y : float; mutable visee : float; mutable leve : bool };;
let crayon = { x = 0.0; y = 0.0; visee = 0.0; leve = false };;
open_graph "";;

let round x = if x >= 0.0 then int_of_float (x +. 0.5) else int_of_float (x -. 0.5);;

let fixe_crayon b = crayon.leve <- b;;

let pi_sur_180 = let pi = 4.0 *. (atan 1.0) in pi /. 180.0;;

let tourne angle = crayon.visee <- (crayon.visee +. angle *. pi_sur_180);;


let avance d =
	let dx = d *. cos (crayon.visee)
	and dy = d *. sin (crayon.visee) in
	crayon.x <- crayon.x +. dx;
	crayon.y <- crayon.y +. dy;
	if crayon.leve
	then moveto (round crayon.x) (round crayon.y)
	else lineto (round crayon.x) (round crayon.y);;

let couleur_du_trace = black;;

let couleur_du_fond = white;;

let zero_x = float_of_int ((size_x ()) / 2);;

let zero_y = float_of_int ((size_y ()) / 2);;

let vide_ecran () =
set_color couleur_du_fond;
fill_rect 0 0 (size_x ()) (size_y ());
set_color couleur_du_trace;
crayon.x <- zero_x;
crayon.y <- zero_y;
crayon.visee <- 0.0;
crayon.leve <- false;
moveto (round crayon.x) (round crayon.y);;


vide_ecran ();;

(*
type agent = {x: float; y : float; z :float};;

let relation a = {x=10.*.(a.x-.a.y); y=(10.*.a.x)-.(a.x*.a.z)-.a.y; z=(a.x*.a.y)-.(8./.3.)*.a.z};;*)