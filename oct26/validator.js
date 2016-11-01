var validatorFactory = function() {
  var val = {},
      numChecks = 0,
      checkHelper;

  const _REGEXES = [
    /^E\d{8}$/,
    /^\d{3}-\d{3}-\d{4}$/
  ];

  val.howManyChecked = numChecks;

  // function() {
  //   return numChecks;
  // };

  checkHelper = function(input, check) {
    numChecks++;
    return _REGEXES[check].test(input);
  }

  val.isEid = function(input) {
    return checkHelper(input, 0);
  };
  val.isPhone = function(input) {

  };
  val.isDate = function(input) {

  };
  val.isSsn = function(input) {

  };
  val.isIp = function(input) {

  };

  return val;
}
