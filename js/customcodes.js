(function() {  
    tinymce.create('tinymce.plugins.one_thurd', {  
        init : function(ed, url) {  
            ed.addButton('one_thurd', {  
                title : 'Add 13 raw',  
                image : url+'/raw.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_thurd]' + ed.selection.getContent() + '[/one_thurd]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_thurd', tinymce.plugins.one_thurd);  
})();  