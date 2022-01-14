import React, { useState } from 'react';
import TradingViewWidget from 'react-tradingview-widget';

function TradingChart() {
    const symbolOptions = ['ETH', 'BTC', 'XRP']
    const rangeOptions = ['1', '10', '1D', '1M', '3M', '6M', 'YTD']
    const currencyOptions = ['USD', 'GBP', 'EUR']

    const [ symbol, setSymbol ] = useState('ETH');
    const [ range, setRange ] = useState('1D');
    const [ currency, setCurrency ] = useState('USD');

    const updateSymbol = (symbol) => {
        setSymbol(symbol);
    }

    const updateRange = (range) => {
        setRange(range);
    }

    const updateCurrency = (currency) => {
        setCurrency(currency);
    }

    return (
        <div>
            <div className="mb-2">
                <div className="mr-4 md:border-r-2 pr-4 inline-block">
                    {symbolOptions.map(option => (
                        <button className={`py-1 px-2 border-2 rounded-md mr-1 md:mr-2 mb-4 md:mb-0 ${option === symbol ? "bg-slate-500 text-white border-slate-500" : ""}`} onClick={() => updateSymbol(option)}>{option}</button>
                    ))}
                </div>

                <div className="mr-4 md:border-r-2 pr-4 inline-block">
                    {rangeOptions.map(option => (
                        <button className={`py-1 px-2 border-2 rounded-md mr-1 md:mr-2 mb-4 md:mb-0 ${option === range ? "bg-slate-500 text-white border-slate-500" : ""}`} onClick={() => updateRange(option)}>{option}</button>
                    ))}
                </div>

                <div className="mr-4 pr-4 inline-block">
                    {currencyOptions.map(option => (
                        <button 
                            className={`py-1 px-2 border-2 rounded-md mr-1 md:mr-2 mb-4 md:mb-0 ${option === currency ? "bg-slate-500 text-white border-slate-500" : ""}`} 
                            onClick={() => updateCurrency(option)}>{option}
                        </button>
                    ))}
                </div>
            </div>

            <div className="chart h-96">
                <TradingViewWidget 
                    autosize="true"
                    symbol={(symbol.length == 0 ? 'COINBASE:ETHUSD' : `COINBASE:${symbol}${currency}`)}
                    range={(range.length == 0 ? '1D' : range)} 
                    hide_top_toolbar="true"
                    style="3"
                />
            </div>
        </div>
    );
}

export default TradingChart;
