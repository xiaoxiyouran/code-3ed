$js = <<<'__JS__'
$.ajax({
  'url': '/api/getStock',
  'data': {
    'ticker': 'LNKD'
  },
  'success': function( data ) {
    $( "#stock-price" ).html( "<strong>$" + data + "</strong>" );
  }
});
__JS__;

print $js;