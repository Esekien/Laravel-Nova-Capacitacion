<?php

namespace App\Nova;

use Acme\Analytics\Analytics;
use App\Nova\Filters\RopasTemporada;
use App\Nova\Lenses\Blusa;
use App\Nova\Lenses\Falda;
use App\Nova\Lenses\Sueter;
use App\Nova\Lenses\Top;
use App\Nova\Lenses\Vestido;
use App\Nova\Metrics\NewRopas;
use App\Nova\Metrics\RopaCategoryComparism;
use App\Nova\Metrics\RopaTrend;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Ropa extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Ropa::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'nombre';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','nombre'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Nombre de la ropa','nombre')
            ->sortable()
            ->required(),
            Image::make('Imagen','foto')
            ->disk('public')
            ->required(),

            Select::make('Tipo de prenda','tipo_ropa')
            ->required()
            ->options([
                'Blusa' => 'Blusa',
                'Vestido' => 'Vestido',
                'Falda' => 'Falda',
                'Top' => 'Top',
                'Sueter' => 'Sueter',
            ]),
            Currency::make('Precio')->currency('MXN'),
            //Number::make('Precio')->required(),
            BelongsTo::make('Talla')->required(),
            BelongsTo::make('Color')->required(),
            BelongsTo::make('Temporada')->required(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new NewRopas(),new RopaTrend()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new RopasTemporada()
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [
            new Vestido(), new Top(), new Sueter(), new Falda(), new Blusa()
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
