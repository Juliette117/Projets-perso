import React from 'react';

function Formations({data}) {
  return (
      <div className='cursus mb3'>
        <h3 className='h3'>Formations</h3>
        <hr></hr>
        {data.map(item => (
            <div className='grid_row' key={item.id}>
                <div className='grid_item'>
                    <p className='grid_date'>{item.date}</p>
                </div>
                <div className='grid_item'>
                    <h4 className='grid_title'>{item.title}</h4>
                    <p className='grid_location'>{item.location}</p>
                </div>
            </div>
        ))}
      </div>
  )
}

export default Formations;
