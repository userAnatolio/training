function square(n)
{
	if(checkNum(n)) return n * n;
	else return null;
}

function cube(n)
{
	if(checkNum(n)) return n * n * n;
	else return null;
}

function checkNum(a)
{
	if(a > 0) return true;
	else return false;
}

exports.square = square;
exports.cube = cube;

