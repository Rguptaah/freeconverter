@extends('layout.layout')

@section('content')
    <div>
        <select name="unit_convert_list" id="unit_converter">
            <option data-v-4ae08c7e="" value="length">Length Converter</option>
            <option data-v-4ae08c7e="" value="weight">Weight Converter</option>
            <option data-v-4ae08c7e="" value="temperature">Temperature Converter</option>
            <option data-v-4ae08c7e="" value="energy">Energy Converter</option>
            <option data-v-4ae08c7e="" value="area">Area Converter</option>
            <option data-v-4ae08c7e="" value="frequency">Frequency Converter</option>
            <option data-v-4ae08c7e="" value="power">Power Converter</option>
            <option data-v-4ae08c7e="" value="electric">Electric Converter</option>
            <option data-v-4ae08c7e="" value="charge">Charge Converter</option>
            <option data-v-4ae08c7e="" value="voltage">Voltage Converter</option>
        </select>
    </div>

    <div>
        <div id="first-input">
            <input type="number" lang="en" pattern="[0-9,.]" id="source">
            <select name="" id="length">
                <option value="meter">Meter(m)</option>
                <option value="cm">Centimeter(cm)</option>
            </select>
        </div>
        
        <div id="second-input">
            <input type="number" lang="en" pattern="[0-9,.]" id="destination">
            <select name="" id="length">
                <option value="inch">inches(in)</option>
                <option value="cm">Centimeter(cm)</option>
            </select>
        </div>
    </div>
@endsection