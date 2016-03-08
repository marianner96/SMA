map = [[agent];[objet]];(*environnement des agents et des objets*)
type coordonnes = {x : float; y :float; z : float}; 
type agent = {ca : coordonnes; intensite : float};
type objet = {co: coordonnes; etat : string; valeur : float; periodicite : float} 