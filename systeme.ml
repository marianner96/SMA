(*Première méthode pour créer un agent *)

type agent =
{
	mutable startState : state
}
and transition = Condition of (agent -> bool)
				|Event of (agent -> bool)
				|ConditionOr of (agent -> bool)
				|ConditionAnd of (agent -> bool)
				|ConditionXor of (agent -> bool)
				|ConditionNor of (agent -> bool)
and state = 
{
	mutable parentstate : state option;
	mutable substate : state option;
	mutable transitions : state list;
	mutable begin_action : state -> state;
	mutable action : state -> state;
	mutable end_action : state -> state
}

(*Seconde méthode : en considérant l'agent comme un objet*)
let o =
	object(self)
		val message = "hello world!"
		method hello = print_endline message
		initializer
			self#hello
	end;;
o#hello 