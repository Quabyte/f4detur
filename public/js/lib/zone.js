/**
 * Zone Class
 *
 * @type {fabric}
 */
fabric.Zone = new fabric.util.createClass(fabric.Polygon, {

    type: 'zone',

    /**
     * Initializer
     *
     * @param points
     * @param options
     */
    initialize: function(points, options) {
        options || (options = { });

        this.callSuper('initialize', points, options);

        // Custom attributes
        this.set('number', options.number || 'Number not set!');

        // Set defaults
        this.set('angle', options.angle || 0);
        this.set('evented', options.evented || true);
        this.set('hasControls', options.hasControls || false);
        this.set('hasRotatingPoint', options.hasRotatingPoint || false);
        this.set('hoverCursor', options.hoverCursor || 'pointer');
        this.set('lockMovementX', options.lockMovementX || true);
        this.set('lockMovementY', options.lockMovementY || true);
        this.set('lockRotation', options.lockRotation || true);
        this.set('hasBorders', options.hasBorders || false);

        this.set('selectable', options.selectable || true);
    },

    /**
     * Convert to object
     *
     * @returns {object}
     */
    toObject: function() {
        return fabric.util.object.extend(this.callSuper('toObject'), {
            number: this.get('number')
        });
    },

    /**
     * Convert to JSON
     *
     * @returns {json}
     */
    toJSON: function () {
        return fabric.util.object.extend(this.callSuper('toJSON'), {
            number: this.get('number')
        });
    },

    /**
     * Renders the number
     *
     * @param ctx
     * @private
     */
    _render: function (ctx) {
        this.callSuper('_render', ctx);

        ctx.font = '10px Helvetica';
        ctx.fillStyle = '#fff';
        ctx.fillText(this.number, -(this.width / 2) + 15, 0, [15]);
        ctx.textAlign = 'center';
    }
});

/**
 * Load from JSON
 *
 * @param object
 * @param callback
 * @param forceAsync
 */
fabric.Zone.fromObject = function (object, callback, forceAsync) {
    return fabric.Object._fromObject('Zone', object, callback, forceAsync, ['points', 'number'])
};