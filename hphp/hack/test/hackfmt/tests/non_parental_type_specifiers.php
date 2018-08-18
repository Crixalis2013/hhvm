<?hh

const array<shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> A = array();

const array<string, shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> B = array();

const vec<shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> C = vec[];

const dict<string, shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> D = dict[];

const Foo<shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> E = new Foo();

const Foo<string, shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> F = new Foo();

const Foo<string, int, shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> G = new Foo();

// This example is not preserved, since Bar<string> contains internal splits.
const Foo<string, int, Bar<string>, shape(
  'fooooooo' => string,
  'baaaaaar' => string,
  'baaaaaaz' => string,
  'quuuuuux' => string,
)> H = new Foo();
