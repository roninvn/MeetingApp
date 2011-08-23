/**
 * @class App.lib.ux.RibbonTab
 * @extend Ext.tab.Tab
 * @author Nam Hoang
 */
Ext.define('MeetingApp.lib.ux.RibbonTab', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.appuxribbontab',
    unstyled: true,
    layout: 'hbox',
    title: 'Untitled',

    defaults: {
        xtype: 'buttongroup',
        headerPosition: 'bottom',
        margins: '1 0 3 3'
    },

    initComponent: function () {
        this.callParent(arguments);

        this.on('added', function (o, c, i) {
            Ext.each(this.items.items, function (btnGroups) {
                Ext.each(btnGroups.items.items, function (item) {
                    if (item.scale !== 'small') {
                        var text = String(item.text);

                        if (text.indexOf('\n') != -1) { // has \n ?
                            text = text.replace('\n', '<br/>');
                        } else if (text.indexOf(' ') != -1) {
                            text = text.replace(/[ +]/gi, '<br/>');
                        } else {
                            if (!item.menu || item.arrowAlign !== 'bottom')
                                item.cls = 'x-btn-as-arrow';
                        }

                        if (item.setText)
                            item.setText(text);
                    }
                });
            });
        });

        this.on('render', function () {
            this.doLayout(true);
        });
    }
});