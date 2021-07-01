<?php

namespace App\Nova;

use App\Nova\Actions\PublishedNombres;
use App\Nova\Actions\unPublishedNombres;
use App\Nova\Filters\NombreCreado;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\image;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Sparkline;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Line;
use Laravel\Nova\Fields\Timezone;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\VaporFile;
use Laravel\Nova\Fields\Date;
class Nombres extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Nombres::class;

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
    public function subtitle()
    {
        return $this->user->email;
    }
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
            BelongsTo::make('User'),
            // para poder ponerle un nombre debes poner el segundo parametro justo como esta en la base de datos
            Text::make('Nick','nombre')->required()->sortable(),
            Heading::make('<p class="text-danger">*Para activo.</p>')->asHtml(),
            Boolean::make('Active')
            ->trueValue('Yes')
            ->falseValue('No'),
            //Code::make('Snippet'),
            //Country::make('Country'),
            //File::make('Attachment'),
            //KeyValue::make('Meta')->rules('json'),
            //Number::make('price')->min(1)->max(1000)->step(0.01),
            //Place::make('Address', 'address_line_1')->hideFromIndex(),
            //Place::make('Address', 'address_line_1')->countries(['US', 'CA']),
            // Select::make('Size')->options([
            //     'S' => 'Small',
            //     'M' => 'Medium',
            //     'L' => 'Large',
            // ]),
            //Timezone::make('Timezone'),
            //Trix::make('Biography'),
            //VaporFile::make('Document'),
            Date::make('Created_at'),   
            //new Panel('No llenar lo de abajo', $this->addressFields()),
        ];
    }
    // protected function addressFields()
    // {
    //     return [
            
    //         Text::make('Address Line 2')->hideFromIndex(),
    //         Text::make('City')->hideFromIndex(),
    //         Text::make('State')->hideFromIndex(),
    //         Text::make('Postal Code')->hideFromIndex(),

    //     ];
    // }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
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
            new NombreCreado()
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
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [ 
            new PublishedNombres(), new unPublishedNombres()
        ];
    }
}
