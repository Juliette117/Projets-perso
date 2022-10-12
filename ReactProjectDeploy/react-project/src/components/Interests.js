import React from 'react';
import { SiDiscogs, SiNintendoswitch, SiYourtraveldottv } from "react-icons/si";
import {FaBookReader, FaCode, FaRebel, FaTwitch} from 'react-icons/fa';


function Interests() {
  return (
    <div className="interests">
        <h3 className='h3'>Centres d'intérêts</h3>
        <ul>
            <li className='music'><SiDiscogs/></li>
            <li className='read'><FaBookReader/></li>
            <li className='travel'><SiYourtraveldottv/></li>
            <li className='code'><a href="https://juliette.cemos.fr/" target="blank"><FaCode/></a></li>
            <li className='switch'><SiNintendoswitch/></li>
            <li className='twitch'><FaTwitch/></li>
            <li className='sw'><FaRebel/></li>
        </ul>
    </div> 
  )
}

export default Interests;


