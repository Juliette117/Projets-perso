import React from 'react';

function Experiences({data}) {
  return (
    
    <div className='cursus mb3'>
  <h3 className='h3'>Expériences professionnelles</h3>
  <hr></hr>
  <div className='grid_row'>
      <div className='grid_item'>
          <p className='grid_date'>05/2022 - 10/2022</p>
      </div>
    <div className='grid_item'>
        <h4 className='grid_title'>Agent de traitement de courrier</h4>
        <p className='grid_location'>Docaposte, CACF Roubaix</p>
    </div>
  </div>
  <div className='grid_row'>
  <div className='grid_item'>
      <p className='grid_date'>09/2021</p>
  </div>
<div className='grid_item'>
    <h4 className='grid_title'>Mission Wordpress</h4>
    <p className='grid_location'>Mahira, Lambersart</p>
    <p className='grid_text'>Refonte de deux sites internet pour l'entreprise<br></br> <a href="https://mahira.fr" target="blank">Mahira</a> et la chanteuse lyrique <a href="https://nobuko-takahashi.com" target="blank">Nobuko Takahashi</a></p>
</div>
</div>
  {data.map(item => (
      <div className='grid_row' key={item.id}>
          <div className='grid_item'>
              <p className='grid_date'>{item.date}</p>
          </div>
          <div className='grid_item'>
              <h4 className='grid_title'>{item.title}</h4>
              <p className='grid_location'>{item.location}</p>
              <p className='grid_text'>{item.text}</p>
              {/*<ul className='grid_missions'>
              {item.missions.map(mission => (
                <li className='grid_mission' key={mission.id}>
                  {mission.title}
                </li>
              ))}
              </ul>*/}
          </div>
      </div>
  ))}
</div>
  ) 
}

export default Experiences;
