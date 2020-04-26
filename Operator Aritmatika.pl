kali(X,1,X):-!.
kali(X,Y,Z):- K is Y-1, kali(X,K,Z1),Z is X+Z1.

pangkat(X,1,X):-!.
pangkat(X,Y,Z):- K is Y-1, pangkat(X,K,Z1), Z is X*Z1.

fpb(X,0,X):- !.
fpb(0,Y,Y):- !.
fpb(X,Y,Z):- X>Y | X=Y, A is mod(X,Y),fpb(A,Y,Z).
fpb(X,Y,Z):- X<Y, A is mod(Y,X),fpb(X,A,Z).
fpb(X,Y,Z) :-X=Y, A is mod(X,Y),fpb(X,A,Z).

faktorial(1,1):-!.
faktorial(X,Y):- K is X-1, faktorial(K,Y1), Y is Y1*X.
