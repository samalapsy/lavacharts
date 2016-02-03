<?php

namespace Khill\Lavacharts\Charts;

/**
 * CandlestickChart Class
 *
 * A bubble chart is used to visualize a data set with two to four dimensions.
 * The first two dimensions are visualized as coordinates, the third as color
 * and the fourth as size.
 *
 *
 * @package    Khill\Lavacharts
 * @subpackage Charts
 * @since      3.0.1
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2015, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */
class CandlestickChart extends Chart
{
    /**
     * Javascript chart type.
     *
     * @var string
     */
    const TYPE = 'CandlestickChart';

    /**
     * Javascript chart version.
     *
     * @var string
     */
    const VERSION = '1';

    /**
     * Javascript chart package.
     *
     * @var string
     */
    const VIZ_PACKAGE = 'corechart';

    /**
     * Google's visualization class name.
     *
     * @var string
     */
    const VIZ_CLASS = 'google.visualization.CandlestickChart';
}
