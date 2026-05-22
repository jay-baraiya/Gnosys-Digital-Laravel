from bs4 import BeautifulSoup
import json

with open('reference.html', 'r', encoding='utf-8') as f:
    soup = BeautifulSoup(f.read(), 'html.parser')

data = []
for section in soup.find_all(class_='elementor-section'):
    if not section.get('data-id'): continue
    sec_data = {'id': section.get('data-id'), 'texts': []}
    
    # Get headings
    for h in section.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6']):
        text = h.get_text(strip=True)
        if text: sec_data['texts'].append({'tag': h.name, 'text': text})
        
    # Get paragraphs
    for p in section.find_all('p'):
        text = p.get_text(strip=True)
        if text: sec_data['texts'].append({'tag': p.name, 'text': text})
        
    # Get images
    imgs = section.find_all('img')
    if imgs:
        sec_data['images'] = [img.get('src') for img in imgs]
        
    # Get buttons
    btns = section.find_all('a', class_=lambda c: c and 'button' in c)
    if btns:
        sec_data['buttons'] = [{'text': btn.get_text(strip=True), 'link': btn.get('href')} for btn in btns]
        
    data.append(sec_data)

with open('scraped_sections.json', 'w', encoding='utf-8') as f:
    json.dump(data, f, indent=2)
print("Scraped properly.")
