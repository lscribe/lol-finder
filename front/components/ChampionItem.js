
import React from 'react'
import { View, Text, StyleSheet, Image } from 'react-native'

export default class ChampionItem extends React.Component {

  render() {
    const champion = this.props.champion

    return (
      <View style = { styles.main_container }>
        <Image
          style = { styles.image }
          source = { champion.image }
        />
        <View style = { styles.content_container}>
          <View style = { styles.header_container}>
            <Text style = { styles.name_text }> {champion.name} </Text>
            <Text style = { styles.title_text }> {champion.title} </Text>
          </View>
          <View style = { styles.description_container}>
            <Text 
              style = { styles.description_text }
              numberOfLines = {3}
            > 
              {champion.blurb}
            </Text>
          </View>
          <View style = { styles.tags_container}>
            <Text style = { styles.tags_text }> {champion.tags} </Text>
          </View>
        </View>
      </View>
    )
  }
}

const styles = StyleSheet.create({
  main_container: {
    height: 120,
    flexDirection: 'row',
    marginBottom: 10
  },
  image: {
    height: 120,
    width: 120,
    resizeMode: 'center',
    margin: 5,
  },
  content_container: {
    flex: 1,
    margin: 5
  },
  header_container: {
    flex: 4,
    flexDirection: 'column'
  },
  name_text: {
    fontWeight: 'bold',
    fontSize: 20,
    flex: 1,
    flexWrap: 'wrap',
    paddingRight: 5
  },
  title_text: {
    fontWeight: 'bold',
    fontSize: 16,
    flex: 1,
    flexWrap: 'wrap',
    paddingRight: 5
  },
  description_container: {
    flex: 5,
    margin: 5
  },
  description_text: {
    fontStyle: 'italic',
    color: '#666666'
  },
  tags_container: {
    flex: 1
  },
  tags_text: {
    textAlign: 'left',
    fontSize: 14
  }
})