function foo(a, b) {
  if (a === b) {
    return true;
  }
  if (typeof a !== 'object' || typeof b !== 'object') {
    return false;
  }
  if (Object.keys(a).length !== Object.keys(b).length) {
    return false;
  }
  for (let key in a) {
    if (!b.hasOwnProperty(key) || !foo(a[key], b[key])) {
      return false;
    }
  }
  return true;
}

var obj1 = { a: 1, b: 2 };
var obj2 = { a: 1, b: 2 };
console.log(foo(obj1, obj2)); // true

var obj3 = { a: 1, b: { c: 3 } };
var obj4 = { a: 1, b: { c: 3 } };
console.log(foo(obj3, obj4)); // true

var obj5 = { a: 1, b: [1, 2] };
var obj6 = { a: 1, b: [1, 2] };
console.log(foo(obj5, obj6)); // false - This is the bug!