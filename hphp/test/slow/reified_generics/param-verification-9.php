<?hh

class C<reify T> {}

function f<reify T>(T $a) {
  return $a;
}

f<C<int>>(new C<int>);
f<C<int>>(new C<string>);
