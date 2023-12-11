/**
 * Form Editors
 */

'use strict';

(function () {
  // Snow Theme
  // --------------------------------------------------------------------
  const snowEditor = new Quill('#snow-editor', {
    bounds: '#snow-editor',
    modules: {
      formula: true,
      toolbar: '#snow-toolbar'
    },
    theme: 'snow'
  });

  // Bubble Theme
  // --------------------------------------------------------------------
  const bubbleEditor = new Quill('#bubble-editor', {
    modules: {
      toolbar: '#bubble-toolbar'
    },
    theme: 'bubble'
  });

  // Full Toolbar
  // --------------------------------------------------------------------
  const fullToolbar = [
    ['bold', 'italic', 'underline'],
    ,
    [
      {
        list: 'ordered'
      },
      {
        list: 'bullet'
      },
      {
        indent: '-1'
      },
      {
        indent: '+1'
      }
    ],
    ['link']
  ];
  const fullEditor = new Quill('#full-editor', {
    bounds: '#full-editor',
    placeholder: 'Masukan isi informasi disini....',
    modules: {
      formula: true,
      toolbar: fullToolbar
    },
    theme: 'snow'
  });
})();
